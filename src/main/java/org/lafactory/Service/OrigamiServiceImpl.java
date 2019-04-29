package org.lafactory.Service;

import java.util.Optional;

import org.lafactory.dao.OrigamiRepository;
import org.lafactory.entities.Origami;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;
import org.springframework.transaction.annotation.Transactional;

@Service
@Transactional
public class OrigamiServiceImpl implements IOrigamiService{
	@Autowired
	private OrigamiRepository origamiRepository;
	@Override
	public Optional<Origami> getOrigami(int id) {
		Optional<Origami> origami = origamiRepository.findById(id);
		if(origami == null) throw new RuntimeException("Origami introuvable");
		return origami;
	}

	@Override
	public void setOrigami(Origami origami) {
		origamiRepository.save(origami);
	}

	@Override
	public int delOrigami(int id) {
		// TODO Auto-generated method stub
		origamiRepository.deleteById(id);
		return 0;
	}
	

}
